<?php

namespace App\Http\Controllers\Atelier;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Validator;
use Image;

class UserController extends Controller
{
    public function index()
    {
        $users = User::get();
        return view('atelier/user/index', ['users' => $users]);
    }
    public function details($user_id)
    {
        $user = User::find($user_id);
        if ($user == null) {
            return redirect()->back();
        }
        return view('atelier/user/details', ['user' => $user]);
    }
    public function eidtInfo(Request $request)
    {
        $data = $request->all();
        $validator_arr = [
            'user_id' => 'required|exists:users,id',
            'email' => 'required|string|email|max:255|unique:users,email,'.$data['user_id'],
            'role' => 'required',
            'phone' => 'required',
        ];
        $validator = Validator::make($data, $validator_arr);
        //提取validator返回的错误信息的第一个
        if ($validator->fails()) {
            return json_encode(['success' => false, 'error' => $validator->errors()]);
        }

        $user = User::find($data['user_id']);
        if ($user == null) {
            return json_encode(['success' => true, 'result' => '找不到该用户请刷新重试']);
        }
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->role = $data['role'];
        $user->phone = $data['phone'];
        $user->introduction = $data['introduction'];
        $user->address = $data['address'];
        $user->save();
        return json_encode(['success' => true, 'result' => $user]);
    }
    public function eidtPicture(Request $request)
    {
        $data = $request->all();
        $validator_arr = [
            'picture' => 'required',
        ];
        $validator = Validator::make($data, $validator_arr);
        //提取validator返回的错误信息的第一个
        if ($validator->fails()) {
            return json_encode(['success' => false, 'error' => $validator->errors()]);
        }

        if ($request->hasFile('picture')) {
            $data['picture'] = $this->storeImage($data['picture']);
        }
        if (!file_exists($data['picture'])) {
            $user = User::find($data['user_id']);
            if ($user == null) {
                return json_encode(['success' => true, 'result' => '找不到该用户请刷新重试']);
            }
            $user->picture = $data['picture'];
            $user->save();
            return json_encode(['success' => true, 'result' => $user]);
        } else {
            return json_encode(['success' => false, 'result' => '上传图片失败']);
        }
    }
    /*
    *   处理上传图片
    */
    private function storeImage($file)
    {
        $allowed_extensions = ["png", "jpg", "gif", "jpeg"];
        $destinationPath = 'uploads/user/picture/';//图片存放目录
        $file_path = public_path($destinationPath);
        //判断是否存在该路径，否则创建该路径
        if (!file_exists($file_path)) {
            mkdir($file_path, 777, true);
        }
        $fileTime = time().rand(100,999);
        $fileFormat = '.'.strtolower($file->getClientOriginalExtension());//文件格式名
        
        $file = Image::make($file->getRealPath())->fit(360)->trim('transparent', array('top', 'left', 'bottom', 'right'));;
        $file->save($file_path.$fileTime.$fileFormat);
        $path = '/'.$destinationPath.$fileTime.$fileFormat;
        return $path;
    }
}
