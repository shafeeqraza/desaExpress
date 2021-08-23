$(document).ready(function() {
    // for delete appended cards
    $(document).on('click', '.fa-minus-circle', function(e) {
        e.target.parentNode.parentNode.remove();
    })
    $('#pickup-btn').on('click', () => {
        $('#pickup-card .pickup-next-sec').append(`

            <div class="pickup-added-card">
                <hr>
                <div class="basic-card-head mt3 d-flex justify-content-between">
                    <h5>Pickups</h5>
                    <i class="fas fa-minus-circle"></i>
                </div>
                <div class="row mt1">
                    <div class="col-lg-4">
                        <label for="">Shipper</label>
                        <input type="text" placeholder="Henry" name="pickupShipper[]">
                    </div>
                    <div class="col-lg-4">
                        <label for="">Pick Up Date</label>
                        <input type="date" name="pickupDate[]">
                    </div>
                    <div class="col-lg-4">
                        <label for="">BOL</label>
                        <input type="text"placeholder="12" name="pickupBol[]">
                    </div>
                </div>
                <div class="row mt2 mb2">
                    <div class="col-lg-8 d-flex flex-column mb2">
                        <label for="">Instructions</label>
                        <textarea cols="30" rows="5" placeholder="Henry" name="pickupInstructions[]"></textarea>
                    </div>
                    <div class="col-lg-8 d-flex flex-column mb2">
                        <label for="">Customer Required Info (Included On Invoice)</label>
                        <textarea cols="30" rows="5" placeholder="Henry" name="pickupCustomerInfo[]"></textarea>
                    </div>
                        <div class="row mt1">
                            <div class="col-lg-4">
                                <label for="">Weight</label>
                                <input type="number" placeholder="Henry" name="pickupWeight[]">
                            </div>
                            <div class="col-lg-4">
                                <label for="">Quantity</label>
                                <input type="number" name="pickupQuantity[]">

                            </div>
                            <div class="col-lg-4 d-flex flex-column">
                                <label for="types">Type</label>
                                <select id="types" name="pickupType[]">
                                    <option value="Boxes">Boxes</option>
                                </select>
                            </div>
                            <div class="col-lg-8 d-flex flex-column mt2">
                                <label for="">Notes</label>
                                <textarea cols="30" rows="5" placeholder="Henry" name=""pickupNotes[]></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        `);
    })

    $('#routing-stop-btn').on('click', () => {
        $('#routing-stop-card .routing-stop-next-sec').append(`
            <div class="added-routing-stop-btn">
            <hr>
                <div class="basic-card-head mt3 mb2 d-flex justify-content-between">
                    <h5>Routing Stop <span>(Optional)</span></h5>
                    <i class="fas fa-minus-circle"></i>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <label for="">Routing Stop</label>
                        <input type="text" placeholder="Henry" name="routeRoutingStop[]">
                    </div>
                    <div class="col-lg-4">
                        <label for="">Routing Stop Date</label>
                        <input type="date" name="routeRoutingStopDate[]" id="">
                    </div>
                    <div class="col-lg-8 d-flex flex-column mt2">
                        <label for="">Instructions</label>
                        <textarea name="routeInstructions[]" id="" cols="30" rows="5" placeholder="Instructions"></textarea>
                    </div>
                    <div class="col-lg-8 d-flex flex-column mt2">
                        <label for="">Notes</label>
                        <textarea name="routeNotes[]" id="" cols="30" rows="5" placeholder="Notes"></textarea>
                    </div>
                </div>
            </div>
        `);
    })
    $('#delivery-btn').on('click', () => {
        $('#delivery-card .another-delivery-sec').append(`
            <div class="added-delivery-card">
            <hr>
            <div class="basic-card-head mt3 mb2 d-flex justify-content-between">
                <h5>Delivery</h5>
                <i class="fas fa-minus-circle"></i>
            </div>
            <div class="row">
                <div class="col-lg-4">
                        <label for="">Consignee</label>
                        <input type="text" name="deliveryConsignee[]" placeholder="Henry">
                </div>
                <div class="col-lg-4">
                    <label for="">Delivery Date</label>
                    <input type="date" name="deliveryDate[]" id="">
                </div>
            </div>
            <div class="col-lg-8 d-flex flex-column mt2">
                <label for="">Instructions</label>
                <textarea name="deliveryInstructions[]" id="" cols="30" rows="5" placeholder="Instructions"></textarea>
            </div>
        </div>
        `);
    })




    $('#add-fuel-btn').on('click', () => {
        addFuleData(null)
    })

    $('#add-truck-expense-btn').on('click', () => {
        addTruckData(null)
    })

    $('#add-refer-fuel-btn').on('click', () => {
        addReferData(null)
    })


    function addFuleData(data){
        $('#add-fuel-btn').hide();
        $('#fuel-expense-card .add-fuel-sec').append(`
            <div class="added-fuel-expense-card">
                    <div class="row">
                        <label  for="fuel-expense">Expense Category</label>
                        <div class="wrapp">
                            <select class="fuel-dropdown" name="fuelCategory" id="added-fuel-expense">
                                <option value="Fuel">Fuel</option>
                                <option value="Refer Fuel">Refer Fuel</option>
                            </select>
                            <i class="fa fa-angle-down"></i>
                        </div>
                    </div>
                    <div class="mb2 mt1">
                        <label for="">Amount</label>
                        <div class="dollar-input">
                            <label for=""><i class="fas fa-dollar-sign"></i></label>
                            <input type="number" placeholder="0.00" name="fuelExpense" value="${data}">
                        </div>
                    </div>
                    <button type="button" id="remove-fuel-expense-btn"><i class="fas fa-minus-circle"></i>Remove Fuel Expenses</button>
            </div>
        `);

        $('#remove-fuel-expense-btn').click(function() {
            $('.added-fuel-expense-card').remove();
            $('#add-fuel-btn').show();
        });
    }

    function addTruckData(data){
        $('#add-truck-expense-btn').hide();
        $('#truck-expense-card .add-truck-expense-sec').append(`
            <div class="added-truck-expense-card">
                <div class="mb2 mt1">
                    <label for="">Amount</label>
                    <div class="dollar-input">
                        <label for=""><i class="fas fa-dollar-sign"></i></label>
                        <input type="number" placeholder="0.00" name="truckExpense" value="${data}">
                    </div>
                </div>
                <button type="button" id="remove-truck-expense-btn"><i class="fas fa-minus-circle"></i>Remove Truck Expenses</button>
            </div>
        `);

        $('#remove-truck-expense-btn').click(function() {
            $('.added-truck-expense-card').remove();
            $('#add-truck-expense-btn').show();
        });
    }

    function addReferData(data){
        $('#add-refer-fuel-btn').hide();
        $('#add-refer-fuel-card .add-refer-fuel-card-sec').append(`
            <div class="added-refer-fuel-expense-card">
                <div class="mb2 mt1">
                    <label for="">Amount</label>
                    <div class="dollar-input">
                        <label for=""><i class="fas fa-dollar-sign"></i></label>
                        <input type="number" placeholder="0.00" name="referFuelAmount" value="${data}">
                    </div>
                </div>
                <button type="button" id="remove-refer-fuel-expense-btn"><i class="fas fa-minus-circle"></i>Remove Refer Fuel Expenses</button>
            </div>
        `);

        $('#remove-refer-fuel-expense-btn').click(function() {
            console.log("rara");
            $('.added-refer-fuel-expense-card').remove();
            $('#add-refer-fuel-btn').show();
        });
    }

console.log(localStorage.getItem('fuel_expense'))
    setTimeout(() => {
        addFuleData(localStorage.getItem('fuel_expense'));
        addTruckData(localStorage.getItem('truck_expense'));
        addReferData(localStorage.getItem('refer_fuel_expense'));

    },1000)
    setTimeout(function() {
        if(localStorage.getItem('fuel_expense') == undefined) {
            $('#remove-fuel-expense-btn').trigger('click');
        }
        if(localStorage.getItem('truck_expense') == undefined) {
            $('#remove-truck-expense-btn').trigger('click');
        }
        if(localStorage.getItem('refer_fuel_expense') == undefined) {
            $('#remove-refer-fuel-expense-btn').trigger('click');
        }
        localStorage.removeItem('fuel_expense')
        localStorage.removeItem('truck_expense')
        localStorage.removeItem('refer_fuel_expense')
    },2000)
})
