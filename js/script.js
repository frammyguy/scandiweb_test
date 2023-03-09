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