$('label').click(function () {
  // $(this).trigger('click');
});


$('input').click(function () {
  var type = $(this).attr('value');

  var checked = $(this).prop("checked");

  console.log(type)

  if (!checked) {
    $('.' + type).hide(500);
    console.log(type + '55')
  } else {
    $('.' + type).show(500);
    console.log(type + '66')
  }

  //在「ALL按鈕」被checked的情況下，按了「其他按鈕」，
  //先將「ALL按鈕」的checked刪除，並將所有box清空，
  //再重新show出被點選按鈕的box
  if ($('.input-kw-all').prop("checked")) {
    if (type !== 'kw-all') {
      $('.kw-all').hide(500);
      $('.input-kw-all').prop('checked', false);
      $('.' + type).show(500);
    }
  }
  //在「其他按鈕」被checked的情況下，按了「ALL按鈕」，
  //先將「其他按鈕」的checked刪除，
  //再show全部box
  if ($('.input-kw-other').prop("checked")) {
    if (type === 'kw-all') {
      console.log('checkedother')
      $('.input-kw-other').prop('checked', false);
      $('.kw-all').show(500);
    }
  }



});