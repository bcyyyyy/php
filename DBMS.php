
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $order=$_POST['order'];
    echo $order;
    $ii=strpos("$order",'insert into');
    if(strpos("$order",'create table') === 0 ) {
        echo "1";
        $name=$order[13];
        $table = fopen("$name.txt", "a+");
        $DD = fopen("DataDictionary.txt", "a+");
        for($x=13;$x<strlen("$order");$x++)
        {
            fwrite($DD,$order[$x]);
            fwrite($table,$order[$x]);
        }
        fwrite($DD,"\n");
        fwrite($table,"\n");
        echo "表创建完成，数据字典创建完成";

    }
    elseif(strpos("$order",'insert into') === 0 ){
            $name=$order[12];
            $myfile=fopen("$name.txt","a+");
            for($x=14;$x<strlen("$order");$x++)
            {
                fwrite($myfile,$order[$x]);
            }
            fwrite($myfile,"\n");
    }
    elseif(strpos("$order",'delete') === 0){
            
    }
}
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="DBMS.php" method="post">
    <input type="text" name="order">
    <input type="submit" value="确认">
</form>
</body>
</html>