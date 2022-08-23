function inputCheck($input_id, $check_id) 
{
  var inputValue = document.getElementById($input_id).value;
  document.getElementById($check_id).innerHTML = inputValue;
}

function selectCheck($input_id, $check_id) 
{
  var inputValue = document.getElementById($input_id).value;
  document.getElementById($check_id).innerHTML = inputValue + "人";
}
