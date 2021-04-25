<?php
if(isset($_POST['calc']))
{
 $sg1 = $_POST['sg1'];
 $sg2 = $_POST['sg2'];
 $sg3 = $_POST['sg3'];
 $sg4 = $_POST['sg4'];
 $sg5 = $_POST['sg5'];
 $sg6 = $_POST['sg6'];
 $sc1 = $_POST['sc1'];
 $sc2 = $_POST['sc2'];
 $sc3 = $_POST['sc3'];
 $sc4 = $_POST['sc4'];
 $sc5 = $_POST['sc5'];
 $sc6 = $_POST['sc6'];
 $lg1 = $_POST['lg1'];
 $lg2 = $_POST['lg2'];
 $lg3 = $_POST['lg3'];
 $lg4 = $_POST['lg4'];
 $lg5 = $_POST['lg5'];
 $lg6 = $_POST['lg6'];
 $lc1 = $_POST['lc1'];
 $lc2 = $_POST['lc2'];
 $lc3 = $_POST['lc3'];
 $lc4 = $_POST['lc4'];
 $lc5 = $_POST['lc5'];
 $lc6 = $_POST['lc6'];

 $scg1 = $sg1*$sc1;
 $scg2 = $sg2*$sc2;
 $scg3 = $sg3*$sc3;
 $scg4 = $sg4*$sc4;
 $scg5 = $sg5*$sc5;
 $scg6 = $sg6*$sc6;
 $lcg1 = $lg1*$lc1;
 $lcg2 = $lg2*$lc2;
 $lcg3 = $lg3*$lc3;
 $lcg4 = $lg4*$lc4;
 $lcg5 = $lg5*$lc5;
 $lcg6 = $lg6*$lc6;

 $sumC = $sc1+$sc2+$sc3+$sc4+$sc5+$sc6+$lc1+$lc2+$lc3+$lc4+$lc5+$lc6;

}
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      #result
      {
        display:flex;
        justify-content:center;
      }
      .note
      {
        font-weight:bold;
      }
    </style>
  </head>
  <body>
    <header>
      <div class="jumbotron text-center">
        <h1>GPA CALCULATOR</h1>
        <span class="note">Note:</span><p>(If you are getting any extra subject or lab fields please leave the fields as it is.)</p>
     </div>
    </header>
     <div class="container">
       <form action="gpacalc.php" method="post">
         <div class="table-responsive">
           <table class="table table-bordered">
             <tr>
               <th>Subjects&amp;Labs</th>
               <th>Grade</th>
               <th>Credits</th>
             </tr>
                 <?php
                   $i = 1;
                   while($i<7)
                   {
                   ?>
                   <tr>
                     <td><?php echo 'Subject'.$i; ?></td>
                     <td>
                      <select class="form-select" name="sg<?php echo $i;?>">
                       <option selected value="0">Grade</option>
                       <option value="10">S</option>
                       <option value="9">A</option>
                       <option value="8">B</option>
                       <option value="7">C</option>
                       <option value="6">D</option>
                       <option value="5">E</option>
                       <option value="0">F</option>
                     </select>
                     </td>
                     <td><input type="text" placeholder="credits" name="sc<?php echo $i; ?>" value="0"></td>
                    </tr>
                 <?php
                     $i++;
                   }
                 ?>
                 <?php
                   $i = 1;
                   while($i<7)
                   {
                   ?>
                   <tr>
                     <td><?php echo 'Lab'.$i; ?></td>
                     <td>
                      <select class="form-select" name="lg<?php echo $i;?>">
                       <option selected value="0">Grade</option>
                       <option value="10">S</option>
                       <option value="9">A</option>
                       <option value="8">B</option>
                       <option value="7">C</option>
                       <option value="6">D</option>
                       <option value="5">E</option>
                       <option value="0">F</option>
                     </select>
                     </td>
                     <td><input type="text" placeholder="credits" name="lc<?php echo $i; ?>" value="0"></td>
                    </tr>
                 <?php
                     $i++;
                   }
                 ?>
           </table>
         </div>
         <input type="submit" name="calc" class="btn btn-primary" value="Calculate">
       </form>
     </div>
    <div class="container m-1" id="result">
      <h3><span class="badge badge-success">GPA:</span>
        <?php
         $result = ($scg1+$scg2+$scg3+$scg4+$scg5+$scg6+$lcg1+$lcg2+$lcg3+$lcg4+$lcg5+$lcg6)/$sumC;
         $fResult = number_format($result,2);
         echo $fResult;
        ?>
      </h3>
    </div>
    <script>

    </script>
  </body>
</html>