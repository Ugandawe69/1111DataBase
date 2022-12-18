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
  window.location.replace("../index.html");
}

function LoginReturndata(data) {
  console.log("222222222");
  console.log(data);
  location.replace("../order.html");
}
