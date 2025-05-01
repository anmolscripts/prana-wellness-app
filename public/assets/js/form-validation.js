const valid = {
    name: (name) => {
        if (name === '' || !/^[a-zA-Z ]+$/.test(name)) {
            return false;
        } else {
            return true;
        }
    },

    email: (email) => {
        if (email === '' || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
            return false;
        } else {
            return true;
        }
    }
}