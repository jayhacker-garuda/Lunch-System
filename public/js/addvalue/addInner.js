function addMeal(what) {
    let prop = document.getElementById(what.id).innerText;
    let order = document.getElementById('put-order')
    // order.append(prop)
    // console.log(order.value =)
    if (order.value == "") {
        order.value = prop;
        $('#display').append(
            `<div class="p-2 bg-teal-200 border-t-2 border-teal-500">
                ${prop}
            </div>`
        );
        console.log("added to Form => " + prop)
    } else {
        let check = order.value.split(',')

        let result = 0
        check.forEach(element => {
            if (element == prop) {
                alert('already added')
                result = 1
            }
        });
        if (result != 1) {
            $('#display').append(
                `<div class="p-2 bg-teal-200 border-t-2 border-teal-500">
            ${prop}
            </div>`
            );
            order.value += "," + prop;
            console.log("added to Form => " + prop)
        }
    }
}