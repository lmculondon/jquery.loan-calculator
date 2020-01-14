<div id="consolidation">
    <h6>Your current borrowing</h6>
    <div class="header-row">
        <div class="type">
            <label>Type</label>
        </div>
        <div class="balance">
            <label>Balance <a href="#" inputmode="numeric" data-toggle="tooltip" data-placement="top" title="The total amount you currently owe"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label>
        </div>
        <div class="repayment">
            <label>Repayment <a href="#" inputmode="numeric" data-toggle="tooltip" data-placement="top" title="The amount you currently repay each month"><i class="fa fa-question-circle" aria-hidden="true"></i></a></label>
        </div>
    </div>
    <div id="repeater-rows">
        <div id="" class="repeat-row">
            <div class="type">
                <select>
                    <option value="credit-card">Credit Card</option>
                    <option value="credit-card">Personal Loan</option>
                    <option value="credit-card">Overdraft</option>
                    <option value="credit-card">Other</option>
                </select>
            </div>
            <div class="balance">
                <input data-type="currency" inputmode="numeric" type="text" placeholder="£0.00"> </div>
            <div class="repayment">
                <input data-type="currency" inputmode="numeric" type="text" placeholder="£0.00"> </div>
            <div class="controls">
                <a class="btn btn-add"></a>
            </div>
        </div>
    </div>
    <div id="RepaymentSize" class="repayment-calc">
        <div class="repayment-calc-label">
            <h6>Total monthly repayment <a href="#" data-toggle="tooltip" data-placement="top" title="We've added this up for you. You should increase it if you can afford to, though."><i class="fa fa-question-circle" aria-hidden="true"></i></a></h6>
            <p>Increasing this will enable you to pay everything off sooner, and is likely to reduce the amount of interest you end up paying.</p>
        </div>
        <div class="repayment-calc-total">
            <input id="TotalRepayment" inputmode="numeric" data-type="currency" type="text" class="form-control" placeholder="£0.00"> </div>
        <div class="mobile-btn-row"><a href="#results">Calculate</a></div>
        
    </div>
</div>

<!-- #widget -->