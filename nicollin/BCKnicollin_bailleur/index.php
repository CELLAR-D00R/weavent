<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
    include 'config.php';
?>
<html>
    <head>   
        <meta charset="UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <title>Test</title>
    </head>
    <body>
        <form action="form.php" class="form" method="POST" >
            <label>Code postal</label><input type="text" id="codepostal" value="" name="codepostal" /> 
            <select id="rues" name="rues">
                 <option value="0">-- Rues --</option>
            </select>
            <select id="residence" name="residence">
                 <option value="0" type='button'>-- Résidence --</option>
            </select>
            <button id="btn_form" type='button'>Recherche</button>
            <div class="champs_form" id="champs_form" style="display:none">
                
            </div>
            <div id='btn_submit' style='display:none'>
            <input type="submit" value="Ok">
            </div>
          </form>
    </body>
</html>
<script>
    $(document).ready(function() {
        var champsform = $('#champs_form');
        var btn_form = $('#btn_form');
        var codepostal = $('#codepostal');
        var rues = $('#rues');
        var residences = $('#residence');
        
        codepostal.change(function(){
           champsform.empty();
           champsform.hide();
           var cp = $(this).val(); 
           if(cp != '') {
               rues.empty(); 
               residences.empty();
            $.ajax({
                url: 'rues.php',
                data: 'code_postal='+ cp, 
                dataType: 'json',
                success: function(json) {
                    rues.append('<option value="0">Choisir rue</option>');
                    $.each(json, function(index, value) {
                        rues.append('<option value="'+ index +'">'+ value +'</option>');
                    });
                }
            }); 
           }
        });
   
        rues.on('change', function() {
        var rue = $(this).val();
        champsform.empty();
        champsform.hide();
        if(rue != '') {
            residences.empty(); 
            $.ajax({
                type: "POST",
                url: 'residence.php',
                data: 'rue='+ rue, 
                dataType: 'json',
                success: function(json) {
                    residences.append('<option value="0">Choisir résidence</option>');
                    $.each(json, function(index, value) {
                        residences.append('<option value="'+ index +'">'+ value +'</option>');
                    });
                }
            });
        }
        });
        btn_form.click(function(){
            if (champsform.is(':hidden')) {
                $.ajax({
                url: 'genererform.php',
                data: 'idresidence='+ residences.val(), 
                dataType: 'html',
                success: function(code_html) {
                    champsform.append(code_html);
                }
            }); 
            champsform.show();
            } else {
                champsform.empty();
                champsform.hide();
            }
        });
    });
</script>
