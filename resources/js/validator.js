// email tersedia
export function isEmailAvailable(value) {
    if (value === "") return true;

    return new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve(value.length > 10);
        }, 500);
    });
}

// validasi phone +62
export function notPhone(value = "") {
    let regex = new RegExp(/(\+62 ((\d{3}([ -]\d{3,})([- ]\d{4,})?)|(\d+)))|(\(\d+\) \d+)|\d{3}( \d+)+|(\d+[ -]\d+)|\d+/);
    return regex.test(value)
}
