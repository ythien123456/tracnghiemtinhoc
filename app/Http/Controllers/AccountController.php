<?php

namespace App\Http\Controllers;

use App\Http\Models\Accounts;
use App\Http\Models\Scores;
use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\InfoChangeRequest;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function profile()
    {
        if (!session('AccountID'))
            return redirect(route('login'));
        $infos = Accounts::getAccountInfo(session('AccountID'));
        if (!$infos)
            return view('errors.errors');
        if ($infos && $infos->Gender == 1)
            $infos->Gender = 'Nam';
        elseif ($infos && $infos->Gender == 2)
            $infos->Gender = 'Nữ';
        else
            $infos->Gender = 'Không xác định';
        return view('profile.infoLayout')
            ->with(['infos' => $infos]);
    }

    public function changeInfo(InfoChangeRequest $request)
    {
        $accountID = session('AccountID');
        $acc = Accounts::find($accountID);
        $acc->FirstName = $request->input('FirstName');
        $acc->LastName = $request->input('LastName');
        $acc->Gender = $request->input('Gender');
        $acc->Address = $request->input('Address');
        if($request->input('PhoneNumber')!=null) {
            $phoneNumberCheck = Accounts::select('PhoneNumber')
                ->where('PhoneNumber',$request->input('PhoneNumber'))
                ->where('AccountID','<>',$accountID)->first();
            if($phoneNumberCheck)
                return back()
                    ->with(['errMessage' => 'Số điện thoại '.$phoneNumberCheck->PhoneNumber.' đã tồn tại trong hệ thống!']);
            $acc->PhoneNumber = $request->input('PhoneNumber');
        } else {
            $acc->PhoneNumber = null;
        }
        $acc->WorkPlace = $request->input('WorkPlace');
        if ($acc->save())
            return back()
                ->with(['successMessage' => 'Thay đổi thông tin thành công!']);
        return back()
            ->with(['errMessage' => 'Thay đổi thông tin thất bại!']);
    }

    public function getScoreHistory()
    {
        $stats = Scores::getBasicScoreStatistic(session('AccountID'));
        $scores = array();
        foreach ($stats as $stat) {
            $i = 0;
            $scoresByExamAndAccountID = Scores::getScoresByExamAndAccountID($stat->ExamID,session('AccountID'));
            foreach ($scoresByExamAndAccountID as $sbe) {
                $scores['score' . $stat->ExamID . '-' . $i] = $sbe->Score;
                $scores['date' . $stat->ExamID . '-' . $i] = $sbe->Date;
                $i++;
            }
        }
        return view('profile.infoLayout')
            ->with(['stats' => $stats,
                'scores' => $scores]);
    }

    public function changePassword(ChangePasswordRequest $request)
    {
        $AccountID = session('AccountID');
        $currentPassword = $request->input('CurrentPassword');
        $newPassword = $request->input('NewPassword');
        $account = Accounts::where('AccountID', $AccountID)->where('Password', md5($currentPassword))->first();

        if (!$account)
            return back()
                ->with(['errorMessage' => 'Mật khẩu hiện tại không đúng!']);
        if($account->Password==md5($newPassword))
            return back()
                ->with(['errorMessage' => 'Mật khẩu mới không được trùng với mật khẩu cũ!']);
        $account->Password = md5($newPassword);
        if ($account->save())
            return back()
                ->with(['message' => 'Thay đổi mật khẩu thành công!']);
        return back()
            ->with(['errorMessage' => 'Thay đổi mật khẩu thất bại!']);
    }
}
