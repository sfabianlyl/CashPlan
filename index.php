<?php
    // include 'dbconn.php';
    // $username=$_COOKIE['User'];
    // $sql="select * from `user` where `user_name`='$username';";
    // $conn->query($sql);
?>



<html>
    <head>
        <style>
            .left-section{
                width:27%;
                display:block;
                float:left;
                height:90%;
                border:1px red dotted;
                padding-top:5%;
            }
            
            .left-section table{
                width:90%;
            }
            .left-section tr:first-child td:first-child{
                text-align:center;
            }
            .left-section tr,td{
                padding:2%;
            }
            .right-section{
                width:70%;
                height:90%;
                display:block;
                float:right;
                border:1px black solid;
                padding-top:5%;
            }
            .card{
                width:auto;
                
                /* border:1px black dotted; */
                height:auto;
                border-radius:5px;
                

            }
            .card-header{
                cursor:pointer;
                background-color:gray;
                height:10vh;
                margin-top:5%;
                margin-left:5%;
                padding:2%;
                border-radius:5px;
            }
            .card-content{
                height:0;
                overflow:hidden;
                transition: height 1s;
                margin-left:5%;
                /* padding-left:7%; */
            }
            .card-content td{
                padding:2%;
            }
            .card-content td:first-child{
                width:50%;
            }
            .card-content td:nth-child(2){
                width:25%;
            }
            .card-content td:nth-child(3){
                width:25%;
            }
            .card-content tr:nth-child(odd){
                background-color:#EEEEEE;

            }
            .card-content tr:nth-child(even){
                background-color:#FFFFFF;
                
            }
        </style>
    </head>
    <body>
        <div class="left-section">
            <table>
                <tr>
                    <td colspan='2'>Card Details</td>
                </tr>
                <tr>
                    <td>Card Number: </td>
                    <td>184791</td>
                </tr>
                <tr>
                    <td>Name: </td>
                    <td>Fabian Lee Yun Lee</td>
                </tr>
                <tr>
                    <td>Faculty: </td>
                    <td>Engineering</td>
                </tr>
                <tr>
                    <td>Year: </td>
                    <td>4</td>
                </tr>
            </table>
        </div>

        <div class="right-section">
            <div class="card">
                <div class="card-header" onclick="displayContent()">
                    Card Balance:       <span>RM43.00</span>
                </div>
                <div class="card-content" id="content1">
                    <table style="width:100%">
                        <tr>
                            <td>Nasi Lemak</td>
                            <td><span style="color:red">-RM7.00</span></td>
                            <td><span style="color:green">RM43.00</span></td>
                        </tr>
                        <tr>
                            <td>Nasi Lemak</td>
                            <td><span style="color:red">-RM7.00</span></td>
                            <td><span style="color:green">RM50.00</span></td>
                        </tr>
                        <tr>
                            <td>Nasi Lemak</td>
                            <td><span style="color:red">-RM7.00</span></td>
                            <td><span style="color:green">RM57.00</span></td>
                        </tr>
                    </table>
                </div>
                <script>
                    window.onload= function(){
                        document.getElementById('content1').style.overflow='hidden';
                    };
                    function displayContent(){
                        if(document.getElementById('content1').style.overflow=='hidden'){

                            document.getElementById('content1').style.height='30vh';
                            document.getElementById('content1').style.overflow='auto';
                            
                        }else{
                            document.getElementById('content1').style.height=0;
                            document.getElementById('content1').style.overflow='hidden';
                            
                        }
                        
                    }
                </script>
            </div>
        </div>
    </body>

</html>
