export default {
    changeTitleAdminPage(title) {
        let eTitle = document.head.querySelector('title');

        return eTitle && (eTitle.text = title)
    },

    errorsToArray(errors) {
        if (typeof errors == 'string') {
            return [errors];
        } else if (typeof errors == 'object') {
            let errorString = [];
            for (let key in errors) {
                errorString = errorString.concat(this.errorsToArray(errors[key]));
            }
            
            return errorString;
        }
    },

    getFirstError(xhr, defaultErorr) {
        let errorsArray = [];
        if (xhr.responseJSON) {
            errorsArray = this.errorsToArray(xhr.responseJSON);
        } else if (xhr.response) {
            errorsArray = this.errorsToArray(xhr.response);
        }

        if (errorsArray[0] && errorsArray[0] !== '') {
            return errorsArray[0];
        }

        return defaultErorr;
    },
}
