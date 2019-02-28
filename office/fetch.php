<?php

 include("dbconnect.php");
$request=$_REQUEST;
$col =array(
    0   =>  'sno',
    1   =>  'branch',
    2   =>  'admnno',
    3   =>  'regdno',
    4   =>  'admncat',
    5   =>  'eamcetht',
    6   =>  'eamcetrank',
    7   =>  'nameofstudent',
    8   =>  'dob',
    9   =>  'sex',
    10  =>  'faname',
    11  =>  'faoccu',
    12  =>  'maname',
    14  =>  'address',
    15   =>  'pincode',
    16   =>  'cellno',
    17   =>  'annualincome',
    18   =>  'nationality',
    19   =>  'aadharno',
    20   =>  'email',
    21   =>  'bloodgroup',
    22   =>  'category',
    23   =>  'sub_cast',
    24   =>  'dateofjoining',
    25  =>  'regulation'
);  //create column like table in database

$sql ="SELECT * FROM st_db";
$query=mysqli_query($conn,$sql);

$totalData=mysqli_num_rows($query);

$totalFilter=$totalData;

//Search
$sql ="SELECT * FROM st_db WHERE 1=1";
if(!empty($request['search']['value'])){
    $sql.=" AND (sno Like '".$request['search']['value']."%' ";
    $sql.=" OR branch Like '".$request['search']['value']."%' ";
    $sql.=" OR admnno Like '".$request['search']['value']."%' ";
    $sql.=" OR regdno Like '".$request['search']['value']."%' )";
}
$query=mysqli_query($conn,$sql);
$totalData=mysqli_num_rows($query);

//Order
$sql.=" ORDER BY ".$col[$request['order'][0]['column']]."   ".$request['order'][0]['dir']."  LIMIT ".
    $request['start']."  ,".$request['length']."  ";

$query=mysqli_query($conn,$sql);

$data=array();

while($row=mysqli_fetch_array($query)){
    $subdata=array();
    $subdata[]=$row[0];
    $subdata[]=$row[1]; //id
    $subdata[]=$row[2]; //name
    $subdata[]=$row[3]; //salary
                //create event on click in button edit in cell datatable for display modal dialog           $row[0] is id in table on database
    $subdata[]='<button  type="button" id="getEdit" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#myModal" data-id="'.$row[0].'"><i class="glyphicon glyphicon-pencil">&nbsp;</i>Edit</button>
                <a href="edit"?delete='.$row[0].'" onclick="return confirm(\'Are You Sure ?\')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>';
    $data[]=$subdata;
}

$json_data=array(
    "draw"              =>  intval($request['draw']),
    "recordsTotal"      =>  intval($totalData),
    "recordsFiltered"   =>  intval($totalFilter),
    "data"              =>  $data
);

echo json_encode($json_data);
		  
?>
