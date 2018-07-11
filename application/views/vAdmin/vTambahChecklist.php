<html><head>
  <title>Tambah Checklist</title>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.css">
</head>
<body style="margin: 30px">

<div class="ui two column centered grid">
<div class="column">
 <div class="ui segment">
  <h3 style="text-align: center;">
   <div class="ui icon">
     <i class="user icon"></i>
   Tambah Checklist</div></h3>
   <div class="ui divider"></div>

  <form class="ui form">
    <div class="field">
      <label>Nama Checklist</label>
      <input type="text" name="NIK" placeholder="Nama Checklist">
    </div>
    <div class="grouped fields">
    <label for="fruit">Jam Pengecekan:</label>
    <div class="field">
      <div class="ui radio checkbox">
        <input type="radio" name="fruit" checked="" tabindex="0">
        <label>Setiap Jam</label>
      </div>
    </div>
    <div class="field" style="width: 100%">
      <div class="ui radio checkbox">
        <input type="radio" name="fruit" tabindex="0">
        <label>Lainnya</label>
        
      </div>
      <div class="field" style="margin-left: 25px">
        <input type="text" name="Jam" placeholder="Tulis Jam disini (03:00, 07:00, 11:00, dst)">
    </div>
    </div>

    <div class="ui small field" >
    <label>Info Checklist</label>
    <input type="file" name="fileToUpload" id="fileToUpload">
    
  </div>
  <div class="ui center aligned basic segment">
    <button class="ui blue button" type="submit">
      <i class="plus icon"></i>
    Tambah
  </button>
  </form>
</div>
</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.3/semantic.min.js"></script>

</body></html>