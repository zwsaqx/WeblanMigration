 //After submission, the radio choices should be reset.
 function handleSubmit(event) {
    event.preventDefault(); // Prevent the default form submission
    const form = event.target;
    form.submit(); // Submit the form
    form.reset(); // Reset the form
}


document.addEventListener('DOMContentLoaded', function() {
    const submitBtn = document.getElementById('submitBtn');
    const radios = document.querySelectorAll('input[type="radio"]');

    function checkRadios() {
        let isChecked = false;
        radios.forEach(radio => {
            if (radio.checked) {
                isChecked = true;
            }
        });
        submitBtn.disabled = !isChecked;
    }

    radios.forEach(radio => {
        radio.addEventListener('change', checkRadios);
    });

    // Check the state of the radio buttons on page load
    checkRadios();
});

window.addEventListener('pageshow', function() {
    const submitBtn = document.getElementById('submitBtn');
    const radios = document.querySelectorAll('input[type="radio"]');

    function checkRadios() {
        let isChecked = false;
        radios.forEach(radio => {
            if (radio.checked) {
                isChecked = true;
            }
        });
        submitBtn.disabled = !isChecked;
    }

    radios.forEach(radio => {
        radio.addEventListener('change', checkRadios);
    });

    // Check the state of the radio buttons on page load

    checkRadios();
});