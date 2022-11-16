<?php 
include("./basic_php_files/community_get.php"); 
include "./basic_php_files/community_board_db.php"; 

    function($mysqli ){
        $sql="Select * from board_db";
        $result = mysqli_query($mysqli, $sql);
        while($board = mysqli_fetch_assoc($result)){

            echo '<tbody>
                        <tr class="even">
                        <td width="50" align="center">'.$board["board_id"].'</td>
                        <td width="500" align="center">'.$board["title"].'<a href=community_read.php>재밌어요</a></td>
                        <td width="200" align="center">'.$board["la"].'2022.11.13</td>
                        <td width="50" align="center">나00</td>
                        </tr>
            </tbody>';
        }
    }






?>