<?php

/**
*app排序
*
*/
class sort_AppSort Implements sort_Interface
{
    private $Type = "";
    publci function __contract($sortType)
    {
        $this->Type = $sortType;
    }

    public function getSort()
    {
        $sortJson = Sort::where('type', $Type)->get();
        $arrId = [];
        $arrSort = json_decode($sortJson);
        foreach($arrSort as $key => $value){
            $arrId[] = $value;
        }
        return $arrId;   
    }

    public function insert($id, $appId)
    {
        $sortJson = Sort::where('type', $Type)->get();
        $arrData = [$id=>$appId];
        if(empty($sortJson)){
            $jsonData = json_encode($JsonData);
            $data =['type' => $Type, '$sort_json' => $jsonData];
            Sort::create($data);
        }else{
            $arrSort = json_decode($sortJson);
        }
    }
}