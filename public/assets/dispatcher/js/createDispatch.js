$(document).ready(function () {
    // for delete appended cards
    $(document).on("click", ".fa-minus-circle", function (e) {
        e.target.parentNode.parentNode.remove();
    });
    $("#pickup-btn").on("click", () => {
        $("#pickup-card .pickup-next-sec").append(`
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
                        <input type="date" name="pickupDate[]" id="">

                    </div>
                    <div class="col-lg-4">
                        <label for="">BOL</label>
                        <input type="text" id="" placeholder="12" name="pickupBol[]">

                    </div>
                </div>
                <div class="row mt2">
                    <div class="col-lg-8 d-flex flex-column mb2">
                        <label for="">Instructions</label>
                        <textarea name="pickupInstructions[]" id="" cols="30" rows="5" placeholder="Henry"></textarea>
                    </div>
                    <div class="col-lg-8 d-flex flex-column mb2">
                        <label for="">Customer Required Info (Included On Invoice)</label>
                        <textarea name="pickupCustomerInfo[]" id="" cols="30" rows="5" placeholder="Henry" ></textarea>
                    </div>
                    <div class="row mt1">
                        <div class="col-lg-4">
                            <label for="">Weight</label>
                            <input type=" number" placeholder="Henry" name="pickupWeight[]">
                        </div>
                        <div class="col-lg-4">
                            <label for="">Quantity</label>
                            <input type="number" name="pickupQuantity[]" id="">

                        </div>
                        <div class="col-lg-4 d-flex flex-column">
                            <label for="types">Type</label>
                            <select id="types" name="pickupType[]">
                                <option value="Boxes">Boxes</option>
                            </select>
                        </div>
                        <div class="col-lg-8 d-flex flex-column mt2">
                            <label for="">Notes</label>
                            <textarea name="pickupNotes[]" id="" cols="30" rows="5" placeholder="Notes"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        `);
    });
    $("#routing-stop-btn").on("click", () => {
        $("#routing-stop-card .routing-stop-next-sec").append(`
            <div class="added-routing-stop-btn">
                <hr>
                <div class="basic-card-head mt3 mb2">
                    <h5>Routing Stop</h5>
                </div>
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
        `);
    });
    $("#delivery-btn").on("click", () => {
        $("#delivery-card .another-delivery-sec").append(`
            <div class="added-delivery-card">
                <hr>
                <div class="basic-card-head mt3 mb2 d-flex justify-content-between">
                    <h5>Delivery</h5>
                    <i class="fas fa-minus-circle"></i>
                </div>
                <div class="basic-card-head mt3 mb2">
                    <h5>Delivery</h5>
                </div>
                <div class="col-lg-4">
                    <label for="">Consignee</label>
                    <input type="text" placeholder="Henry" name="deliveryConsignee[]">
                </div>
                <div class="col-lg-4">
                    <label for="">Delivery Date</label>
                    <input type="date" name="deliveryDate[]" id="">
                </div>
                <div class="col-lg-8 d-flex flex-column mt2">
                    <label for="">Instructions</label>
                    <textarea name="deliveryInstructions[]" id="" cols="30" rows="5" placeholder="Instructions"></textarea>
                </div
            </div>
        `);
    });
    $("#add-fuel-btn").on("click", () => {
        $("#fuel-expense-card .add-fuel-sec").append(`
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
                        <input type="number" placeholder="0.00" name="fuelExpense">
                    </div>
                </div>
                <button type="button" id="remove-fuel-expense-btn">
                    <i class="fas fa-minus-circle"></i> Remove Fuel Expenses
                </button>
            </div>
        `);
        $("#remove-fuel-expense-btn").click(function () {
            $(".added-fuel-expense-card").remove();
            $("#add-fuel-btn").show();
        });
    });
    $("#add-fuel-btn").click(function () {
        $(this).hide();
    });
    $("#add-truck-expense-btn").on("click", () => {
        $("#truck-expense-card .add-truck-expense-sec").append(`
            <div class="added-truck-expense-card">
                <div class="mb2 mt1">
                    <label for="">Amount</label>
                    <div class="dollar-input">
                        <label for=""><i class="fas fa-dollar-sign"></i></label>
                        <input type="number" placeholder="0.00" name="truckExpense">
                    </div>
                </div>
                <button type="button" id="remove-truck-expense-btn">
                    <i class="fas fa-minus-circle"></i>Remove Truck Expenses
                </button>
            </div>
        `);

        $("#remove-truck-expense-btn").click(function () {
            $(".added-truck-expense-card").remove();
            $("#add-truck-expense-btn").show();
        });
    });

    $("#add-truck-expense-btn").click(function () {
        $(this).hide();
    });
    $("#add-refer-fuel-btn").on("click", () => {
        $("#add-refer-fuel-card .add-refer-fuel-card-sec").append(`
            <div class="added-refer-fuel-expense-card">
                <div class="mb2 mt1">
                    <label for="">Amount</label>
                    <div class="dollar-input">
                        <label for=""><i class="fas fa-dollar-sign"></i></label>
                        <input type="number" placeholder="0.00" name="referFuelAmount">
                    </div>
                </div>
                <button type="button" id="remove-refer-fuel-expense-btn">
                    <i class="fas fa-minus-circle"></i>Remove Refer Fuel Expenses
                </button>
            </div>
        `);

        $("#remove-refer-fuel-expense-btn").click(function () {
            $(".added-refer-fuel-expense-card").remove();
            $("#add-refer-fuel-btn").show();
        });
    });

    $("#add-refer-fuel-btn").click(function () {
        $(this).hide();
    });
});
