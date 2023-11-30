<?php

function taogiohang($tensp,$hinhsp,$dongia,$soluong,$thanhtien,$idbill){
    $conn=ketnoidb();
    $sql = "INSERT INTO tbl_cart(tensp,hinhsp,dongia,soluong,thanhtien,idbill) VALUES ('$tensp','$hinhsp','$dongia','$soluong','$thanhtien','$idbill')";
    // use exec() because no results are returned
    $conn->exec($sql);
    $conn = null;
}
function taodonhang($name,$address,$tel,$email,$total,$pttt){
    $conn=ketnoidb();
    $sql = "INSERT INTO tbl_bill(name,address,tel,email,total,pttt) VALUES ('$name','$address','$tel','$email','$total','$pttt')";
    // use exec() because no results are returned
    $conn->exec($sql);
    $last_id = $conn->lastInsertId();
    $conn = null;
    return $last_id;
}
function ketnoidb(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "shop";
    
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
        
    } catch(PDOException $e) {
       return $e->getMessage();
    }
    
}
function tongdonhang(){
    $tong=0;
    if(isset($_SESSION['giohang'])&&(is_array($_SESSION['giohang']))){
        if(sizeof($_SESSION['giohang'])>0){
            
            for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) { 
                $tt=$_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3];
                $tong+=$tt;
                
            }
            
        }  
    }
    return $tong;
}

function showgiohang(){
    $ttgh="";
    if(isset($_SESSION['giohang'])&&(is_array($_SESSION['giohang']))){
        if(sizeof($_SESSION['giohang'])>0){
            $tong=0;
            for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) { 
                $tt=$_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3];
                $tong+=$tt;
                $ttgh.= '<tr>
                        <td>'.($i+1).'</td>
                        <td><img src="images/'.$_SESSION['giohang'][$i][0].'" alt=""></td>
                        <td>'.$_SESSION['giohang'][$i][1].'</td>
                        <td>'.$_SESSION['giohang'][$i][2].'</td>
                        <td>'.$_SESSION['giohang'][$i][3].'</td>
                        <td>
                            <div>'.$tt.'</div>
                        </td>
                        <td>
                            <a href="cart.php?delid='.$i.'">Xóa</a>
                        </td>
                    </tr>';
            }
            $ttgh.= '<tr>
                    <th colspan="5">Tổng đơn hàng</th>
                    <th>
                        <div>'.$tong.'</div>
                    </th>

                </tr>';
        }   
    }
    return $ttgh;
}
?>