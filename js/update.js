/* this file contains 2 event listeners for socks_update.php.
    socks_update.php writes one of 2 forms into the HTML.
    one form lets us EDIT an existing sock record.
    the other form lets us DELETE an existing sock record.
    depending on which form was submitted, one of the
    2 following scripts will run.
*/

// these are the two forms in socks_update.php -
const sockupdate = document.querySelector('#sockupdate');
const socksdelete = document.querySelector('#socksdelete');

// this DIV in socks_update.php contains the forms -
const inner_content = document.querySelector('#inner_content');

// delete record
if (socksdelete) {
    socksdelete.onsubmit = (e) => {
        // gets the names and current values from the form
        const formData = new FormData(socksdelete);
        // get value of the yes radio button: true or false
        const destroy = document.querySelector('#yes').checked;

        // uncheck both radio buttons
        document.querySelector('#yes').checked = false;
        document.querySelector('#no').checked = false;
        // empty the id value
        document.querySelector('#id').value = '';

        // if not yes, stay on same page and write message into the HTML
        if (destroy == false) {
            // replace the form in socks_update.php with this -
            inner_content.innerHTML =
            "<p class='announce'>The record was not deleted.</p>";
        } else {
            // if yes, go to PHP and the database on the server
            // FETCH
            fetch('delete.php', {
                method: "POST",
                body: formData,
                credentials: "same-origin"
            })
            .then( (response) => {
                if (!response.ok) {
                    throw new Error("Network response was not ok");
                }
                return response.text();
            })
            .then( (data) => {
                inner_content.innerHTML =
                "<p class='announce'>" + data + "</p>";
            })
            .catch( (error) => {
                console.error('Error in fetch: ', error);
            }); // end of FETCH
        } // end if-else
        return false;
    }; // end socksdelete.onsubmit
} // end if

// update record
if (sockupdate) {
    sockupdate.onsubmit = (e) => {
        // gets the names and current values from the form
        const formData = new FormData(sockupdate);
        // if yes, go to PHP and the database on the server
        // FETCH
        fetch('update.php', {
            method: "POST",
            body: formData,
            credentials: "same-origin"
        })
        .then( (response) => {
            if (!response.ok) {
                throw new Error("Network response was not ok");
            }
            return response.text();
        })
        .then( (data) => {
            inner_content.innerHTML =
            "<p class='announce'>" + data + "</p>";
        })
        .catch( (error) => {
            console.error('Error in fetch: ', error);
        }); // end of FETCH
        return false;
    }; // end sockupdate.onsubmit
} // end if
