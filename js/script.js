let select = document.querySelector('#productType');

if (select !== null)
select.addEventListener("change", (event) => {

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
    document.getElementById('productType').addEventListener('change', function() {
        document.querySelectorAll('.NonReq').forEach(opt => {
            opt.setAttribute('hidden','hidden');
        });
    });

    document.getElementById('save-product-btn').addEventListener('click', function( form ) {
        document.querySelectorAll('.isInvalid').forEach(opt => {
            opt.setAttribute('hidden','hidden');
        });

        let check = true;

        let sku = document.getElementById('sku');
        if (sku.value == "") {
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
        if (price.value == "") {
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
            if (size.value == "") {
                document.getElementById('sizeIsInvalid').removeAttribute('hidden');
                size.setAttribute('style', 'border-color: #bf2121;');
                check = false
            } else
                size.setAttribute('style', 'border-color: #dee2e6;');
            delete(size);
        }

        if (select.value == "book") {
            let weight = document.getElementById('weight');
            if (weight.value == "") {
                document.getElementById('weightIsInvalid').removeAttribute('hidden');
                weight.setAttribute('style', 'border-color: #bf2121;');
                check = false
            } else
                weight.setAttribute('style', 'border-color: #dee2e6;');
        delete(weight);
        }

        if (select.value == "furniture") {

            let height = document.getElementById('height');
            if (height.value == "") {
                document.getElementById('heightIsInvalid').removeAttribute('hidden');
                height.setAttribute('style', 'border-color: #bf2121;');
                check = false
            } else
                height.setAttribute('style', 'border-color: #dee2e6;');
            delete(height);

            let width = document.getElementById('width');
            if (width.value == "") {
                document.getElementById('widthIsInvalid').removeAttribute('hidden');
                width.setAttribute('style', 'border-color: #bf2121;');
                check = false
            } else
                width.setAttribute('style', 'border-color: #dee2e6;');
            delete(width);

            let length = document.getElementById('length');
            if (length.value == "") {
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