export function callApiLogin(params) {
    return axios.post('/login', params)
        .then(response => response)
        .catch(error => error)
}

export function callApiLogout() {
    return axios.post('/logout')
        .then(response => response)
        .catch(error => error)
}

export function callApiChangePassword(params) {
    return axios.put('/change-password', params)
        .then(response => response)
        .catch(error => error)
}
