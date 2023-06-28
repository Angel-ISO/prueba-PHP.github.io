<script type="text/javascript" src="view/campersR/maincampers.js"></script>

<h1 class="text-center ">Registro campers</h1>
<div class="container ">
 <form class="form enlacecity">

<label class="lb" for="nome">Name:</label>
      <input name="nome" id="nome" type="text" class="infos">

      <label for="nome" class="lb">apellido:</label>
      <input name="nome" id="nome" type="text" class="infos">



      Region&raquo; <select onchange="set_country(this,country,city_state)" size="1" name="region">
<option value="" selected="selected">SELECT REGION</option>
<option value=""></option>
<script type="text/javascript">
setRegions(this);
</script>
</select>
Country&raquo; <select name="country" size="1" disabled="disabled" onchange="set_city_state(this,city_state)"></select>
City/State&raquo; <select name="city_state" size="1" disabled="disabled" onchange="print_city_state(country,this)"></select>
            

      <label for="data" class="lb">Date of born:</label>
      <input name="data" id="data" type="date" class="infos">

      <button id="send" type="submit">Send</button>
      <button id="limpar" type="reset">Clear </button>
    </form>
<div id="txtregion"></div>
<div id="txtplacename"></div>

<div class="container-fluid" id="uicity">

</div>
</div>


  





