var Loan = function(amount, interestPercent, minimumPayment) {
  this.amount = amount;
  this.interestPercent = interestPercent;
  this.minimumPayment = minimumPayment;
};

Loan.prototype.interest = function(amount) {
	return ((this.interestPercent / 100) * amount);
};