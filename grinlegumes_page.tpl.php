<!-- Title and guide text  -->
<div>
  <h1>GRIN Legumes: Germplasn Data from GRIN for Legumes</h1>
  <span>Search for trait evaluation data with a GRIN accession no for the available species.</span>
  <span style="font-size: 75%">(Based on the descriptor data downloaded from GRIN in Sep 2015.)</span>
  <hr/>
</div>

<!-- Form  -->
<div>
<form  method="get">
  <br/>
  Enter the Genus and a GRIN Accession Number (<i>without any prefix like 'PI', just the number</i>): <br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
  
  <input type="text" id="grin_acc_no" name="grin_acc_no" required value="<?php print $_GET['grin_acc_no']; ?>" >
  &nbsp;&nbsp;&nbsp;&nbsp;
  
   <select  id="grin_taxon"  name="grin_taxon"  value="<?php print $_GET['grin_taxon']; ?>" >
     <option value="">Any</option>
     <option value="Arachis">Arachis</option>
     <option value="Cicer">Cicer</option>
   </select> 


  <br>
  <input type="submit" value="SUBMIT">
  <br>
   <?php  echo($examples); // from the module file via _theme() ?>  

</form>
</div>

<!-- Message  -->
<div>
  <hr/>
  <fieldset  style="background: #E0E0E0;">
    <?php  echo "<b>ACCESSION NUMBER: ".$acc_no."</b>";  echo "<br/>"
    ."Extra for debug: ".$acc_no2."  prefix: ".$acc_no_prefix."  num: ".$acc_no_num; 
    ?>
  </fieldset>
</div>

<!-- Iframe GRIN  -->

<div>
  <?php  //echo "hello".$result;  ?>
  <?php
  
    
    echo $html_content;
    

  ?>
    
    
</div>


<!-- SCRATCH PAD  -->

