function getFormData($form) {
  var unindexed_array = $form.serializeArray();
  //console.log(unindexed_array);
  var indexed_array = {};

  $.map(unindexed_array, function (n, i) {
    indexed_array[n["name"]] = n["value"];
  });

  return indexed_array;
}

function RegisterReturndata(data) {
  console.log("1111111111");
  console.log(data);
  //如果成功就換頁
  if (data == "success") {
    //需要顯示註冊成功
    window.location.replace("../index.html");
  }
  if (data == "fail") {
    //需要顯示失敗
  }
  if (data == "mysql error") {
    //需要顯示mysql error
  }
}

function LoginReturndata(data) {
  console.log("222222222");
  console.log(data);
  if (data == "success") {
    window.location.replace("../order.html");
  }
}
