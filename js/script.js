let select = document.querySelector('#productType');

if (select !== null)
select.addEventListener("change", () => {

    document.querySelectorAll('.optional').forEach(opt => {
        opt.setAttribute("hidden", "");
    })

    if (select.value == 'dvd') {
        document.querySelectorAll('.dvd').forEach(opt => {
            opt.removeAttribute("hidden")
        })
    }
    if (select.value == 'book') {
        document.querySelectorAll('.book').forEach(opt => {
            opt.removeAttribute("hidden")
        })
    }
    if (select.value == 'furniture') {
        document.querySelectorAll('.furniture').forEach(opt => {
            opt.removeAttribute("hidden")
        })
    }
    
});

let form = document.getElementById('product-form');

if (form !== null) {

    form.addEventListener('keydown', function(event) {
        if(event.keyCode == 13) {
           event.preventDefault();
        }
     });

    document.getElementById('productType').addEventListener('change', () => {
        document.querySelectorAll('.NonReq').forEach(opt => {
            opt.setAttribute('hidden','hidden');
        });
    });

    document.getElementById('save-product-btn').addEventListener('click', () => {
        document.querySelectorAll('.isInvalid').forEach(opt => {
            opt.setAttribute('hidden','hidden');
        });

        let check = true;

        let skuCheck = document.getElementById('skuCheck').classList.value;

        let sku = document.getElementById('sku');
        if (sku.value == ""  || skuCheck.includes(sku.value)) {
            if (sku.value == "") document.getElementById('priceIsInvalid').innerHTML = 'Please, submit required data';
            else if (skuCheck.includes(sku.value)) document.getElementById('skuIsInvalid').innerHTML = 'This SKU already exists';
            document.getElementById('skuIsInvalid').removeAttribute('hidden');
            sku.setAttribute('style', 'border-color: #bf2121;');
            check = false
        } else
            sku.setAttribute('style', 'border-color: #dee2e6;');
       delete(sku);

       let name = document.getElementById('name');

        if (name.value == "") {
            document.getElementById('nameIsInvalid').removeAttribute('hidden');
            name.setAttribute('style', 'border-color: #bf2121;');
            check = false   
        } else
            name.setAttribute('style', 'border-color: #dee2e6;');
            
       delete(name);

       let price = document.getElementById('price');
        if (price.value == "" || isNaN(price.value) || price.value <= 0) {
            if (isNaN(price.value)) document.getElementById('priceIsInvalid').innerHTML = 'Please, provide the data of indicated type';
            if (price.value <= 0) document.getElementById('priceIsInvalid').innerHTML = 'Please, provide the data of indicated type';
            if (price.value == "") document.getElementById('priceIsInvalid').innerHTML = 'Please, submit required data';
            document.getElementById('priceIsInvalid').removeAttribute('hidden');
            price.setAttribute('style', 'border-color: #bf2121;');
            check = false
        } else
            price.setAttribute('style', 'border-color: #dee2e6;');

       delete(price);

        let select = document.getElementById('productType');
        if (select.value == "empty") {
            document.getElementById('selectIsInvalid').removeAttribute('hidden');
            select.setAttribute('style', 'border-color: #bf2121;');
            check = false
        } else
            select.setAttribute('style', 'border-color: #dee2e6;');
        if (select.value == "dvd") {
            let size = document.getElementById('size');
            if (size.value == "" || isNaN(size.value) || size.value <= 0) {
                if (isNaN(size.value)) document.getElementById('sizeIsInvalid').innerHTML = 'Please, provide the data of indicated type';
                if (size.value <= 0) document.getElementById('sizeIsInvalid').innerHTML = 'Please, provide the data of indicated type';
                if (size.value == "") document.getElementById('sizeIsInvalid').innerHTML = 'Please, submit required data';
                document.getElementById('sizeIsInvalid').removeAttribute('hidden');
                size.setAttribute('style', 'border-color: #bf2121;');
                check = false
            } else
                size.setAttribute('style', 'border-color: #dee2e6;');
            delete(size);
        }

        if (select.value == "book") {
            let weight = document.getElementById('weight');
            if (weight.value == "" || isNaN(weight.value) || weight.value <= 0) {
                if (isNaN(weight.value)) document.getElementById('weightIsInvalid').innerHTML = 'Please, provide the data of indicated type';
                if (weight.value <= 0) document.getElementById('weightIsInvalid').innerHTML = 'Please, provide the data of indicated type';
                if (weight.value == "") document.getElementById('weightIsInvalid').innerHTML = 'Please, submit required data';
                document.getElementById('weightIsInvalid').removeAttribute('hidden');
                weight.setAttribute('style', 'border-color: #bf2121;');
                check = false
            } else
                weight.setAttribute('style', 'border-color: #dee2e6;');
        delete(weight);
        }

        if (select.value == "furniture") {

            let height = document.getElementById('height');
            if (height.value == "" || isNaN(height.value) || height.value <= 0) {
                if (isNaN(height.value)) document.getElementById('heightIsInvalid').innerHTML = 'Please, provide the data of indicated type';
                if (height.value <= 0) document.getElementById('heightIsInvalid').innerHTML = 'Please, provide the data of indicated type';
                if (height.value == "") document.getElementById('heightIsInvalid').innerHTML = 'Please, submit required data';
                document.getElementById('heightIsInvalid').removeAttribute('hidden');
                height.setAttribute('style', 'border-color: #bf2121;');
                check = false
            } else
                height.setAttribute('style', 'border-color: #dee2e6;');
            delete(height);

            let width = document.getElementById('width');
            if (width.value == "" || isNaN(width.value) || width.value <= 0) {
                if (isNaN(width.value)) document.getElementById('widthIsInvalid').innerHTML = 'Please, provide the data of indicated type';
                if (width.value <= 0) document.getElementById('widthIsInvalid').innerHTML = 'Please, provide the data of indicated type';
                if (width.value == "") document.getElementById('widthIsInvalid').innerHTML = 'Please, submit required data';
                document.getElementById('widthIsInvalid').removeAttribute('hidden');
                width.setAttribute('style', 'border-color: #bf2121;');
                check = false
            } else
                width.setAttribute('style', 'border-color: #dee2e6;');
            delete(width);

            let length = document.getElementById('length');
            if (length.value == "" || isNaN(length.value) || length.value <= 0) {
                if (isNaN(length.value)) document.getElementById('lengthIsInvalid').innerHTML = 'Please, provide the data of indicated type';
                if (length.value <= 0) document.getElementById('lengthIsInvalid').innerHTML = 'Please, provide the data of indicated type';
                if (length.value == "") document.getElementById('lengthIsInvalid').innerHTML = 'Please, submit required data';
                document.getElementById('lengthIsInvalid').removeAttribute('hidden');
                length.setAttribute('style', 'border-color: #bf2121;');
                check = false
            } else
                length.setAttribute('style', 'border-color: #dee2e6;');
           delete(length);

        }
        delete(select);

        if (check) document.getElementById('formSubButton').click();
    });

};

$deleteCh = document.getElementById('delete-form');
if ($deleteCh != null)
    document.querySelectorAll('.delete-checkbox').forEach(box => { 
        box.addEventListener('change', () => {
            document.querySelectorAll('.delete-checks').forEach(opt => {
                if (opt.id == box.id) {
                    if (box.checked)
                        opt.checked = true;
                    else
                        opt.checked = false;
                }
            });
        });
    });

$delButt = document.getElementById('delete-product-btn');

if ($delButt != null)
    $delButt.addEventListener('click', ()=> {
        document.getElementById('formDelButton').click();
    })