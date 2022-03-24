<center>
    <style>
        body{
            margin: 0;
            padding: 0;
            background: #333333
            
        }
        table{
            border-collapse: collapse;
            border: 2px solid #fff;
        }
        h1{
            color: #000;
            background: #333333;
            font-family: sans-serif;
            padding: 1rem;
            font-weight: 700;
            -webkit-text-stroke: 1px #fff;
        }
        </style>
    <h1>Chess Board</h1>
<table>
    <?php
    for ($row=1; $row<=8; $row++) {
        echo "<tr>";
        for ($col=1; $col<=8 ; $col++) { 
            $total = $row + $col;
            if($total%2==0) {
                echo "<td height='25px', width='25px' bgcolor='black'> </td>";
            } else {
                echo "<td height='25px', width='25px' bgcolor='#ffffff'> </td>";
            }
        }
        echo "</tr>";
    }
    ?>
</table>
</center>