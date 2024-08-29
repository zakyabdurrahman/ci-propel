

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="/news" method="post">
  <?= csrf_field() ?>

  <label for="">Headline</label>
  <input type="text" name="headline" value="<?= set_value('headline') ?>">

  <button type="submit">Create News</button>

</form>
