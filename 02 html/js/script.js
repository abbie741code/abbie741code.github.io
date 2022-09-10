$('label').click(function () {
  // $(this).trigger('click');
});

let checkList = []

//當按下tag按鈕時
$('input').click(function () {
  var type = $(this).attr('value');
  var checked = $(this).prop("checked");
  // console.log(type)

  //假設該tag按鈕被反checked
  if (!checked) {
    $('.' + type).hide(500);
    console.log(type + '55')

    //找出和type一樣的物件,定義為searchTag
    const searchTag = (element) => element == type;
    // console.log(checkList.findIndex(searchTag));

    //找出searchTag在checkList是第幾位,定義為tagNumber
    const tagNumber = checkList.findIndex(searchTag)
    // console.log(tagNumber)

    //將checkList中的tagNumber刪除
    checkList.splice(tagNumber, 1)
    // console.log(checkList)

    for (let i = 0; i < checkList.length; i++) {
      $('.' + checkList[i]).show(500);
    }



  } else {  //假設該tag按鈕被checked
    $('.' + type).show(500);
    checkList.push(type)
    // console.log(type + '66')
    // console.log(checkList)
  }


  //在「ALL按鈕」被checked的情況下，按了「其他按鈕」，
  //先將「ALL按鈕」的checked刪除，並將所有box清空，
  //再重新show出被點選按鈕的box
  if ($('.input-kw-all').prop("checked")) {
    if (type !== 'kw-all') {
      // console.log('input-kw-all')
      $('.kw-all').hide(500);
      $('.input-kw-all').prop('checked', false);
      $('.' + type).show(500);
    }
  }

  //判斷是否有「其他按鈕」被checked
  var isChecked = $('.input-kw-other:checked').length > 0
  console.log(isChecked)

  //在有「其他按鈕」被checked的情況下，按了「ALL按鈕」，
  //先將「其他按鈕」的checked刪除，
  //再show全部box
  if (isChecked) {
    if (type === 'kw-all') {
      // console.log('input-kw-other')
      $('.input-kw-other').prop('checked', false);
      $('.kw-all').show(500);
      checkList = []
    }
  }

  // //在「其他按鈕」被checked的情況下，按了「ALL按鈕」，
  // //先將「其他按鈕」的checked刪除，
  // //再show全部box
  // if ($('.input-kw-other').prop("checked")) {
  //   // console.log($('.input-kw-other').prop("checked"))
  //   if (type === 'kw-all') {
  //     // console.log('input-kw-other')
  //     $('.input-kw-other').prop('checked', false);
  //     $('.kw-all').show(500);
  //     checkList = []
  //   }
  // }



});