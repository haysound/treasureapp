function fill_ups()
{
	if((document.getElementById('amountpaid').value)!==NaN)
		{
                  var amount_paid = document.getElementById('amountpaid');
                 //alert(amount_paid);
                document.getElementById('amount-paid').value = amount_paid.value;
                document.getElementById('actual-tithe').value = amount_paid.value;
                 document.getElementById('balance-given').value = 0;
                 
            }
}