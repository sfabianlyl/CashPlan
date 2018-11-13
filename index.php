<?php
    include 'dbconn.php';
    $username=$_COOKIE['User'];
    $sql="select * from `user` where `user_name`='$username';";
    $conn->query($sql);
?>



<html>
    <head>
        <style>
            .section{
                width:70%;
                height:70%;
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
            td{
                padding:2%;
            }
            td:first-child{
                width:50%;
            }
            td:nth-child(2){
                width:25%;
            }
            td:nth-child(3){
                width:25%;
            }
            tr:nth-child(odd){
                background-color:#EEEEEE;

            }
            tr:nth-child(even){
                background-color:#FFFFFF;
                
            }
        </style>
    </head>
    <body>
        <div class="section">
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
