<?php

class AuthController extends BaseController
{
    public function rangeAction()
    {
        $rangelist = DB::table('range')->get();
        foreach($rangelist as $k=>$v){
            if ($v->parent_id > 0){
                foreach ($rangelist as $key=>$value){
                    if ($value->id == $v->parent_id){
                        if (isset($rangelist[$key]->level)){
                            array_push($rangelist[$key]->level,$v);
                        }else{
                            $rangelist[$key]->level[] = $v;
                        }
                        unset($rangelist[$k]);
                    }
                }
            }
        }
        $this->getView()->display('admin/range',['rangelist'=>$rangelist]);
        return false;
    }
    public function editrangeAction()
    {
        $request = Request($this->getRequest());
        if(count((array)$request)>1){
            $request->status = isset($request->status)?1:0;
            unset($request->csrf_token);
            if (DB::table('range')->where('id',$_GET['id'])->update((array)$request)){
                echo json_encode(['status'=>1,'msg'=>'权限修改成功']);
            }
            return false;
        }
        $range = DB::table('range')->where('id',$request->id)->first();
        $parent = DB::table('range')
            ->where('parent_id',0)
            ->select('id','name')
            ->get();
        $this->getView()->display('admin/addrange',[
            'parent'=>$parent,
            'range'=>$range,
            'csrf'=>Csrf::generate('csrf_token')
        ]);
        return false;
    }
    public function addRangeAction()
    {
        $request = Request($this->getRequest());
        if($request){
            $request->status = isset($request->status)?1:0;
            unset($request->csrf_token);
            if (DB::table('range')->insert((array)$request)){
                echo json_encode(['status'=>1,'msg'=>'新的权限添加成功']);
            }
            return false;
        }
        $parent = DB::table('range')
            ->where('parent_id',0)
            ->select('id','name')
            ->get();
        $this->getView()->display('admin/addrange',['parent'=>$parent,'csrf'=>Csrf::generate('csrf_token')]);
        return false;
    }
}
