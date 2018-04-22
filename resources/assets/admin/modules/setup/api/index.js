export function callApiShow(params = {}) {
    return axios.get('/setups', params)
        .then(response => response)
        .catch(error => error)
}

export function callApiEdit(params) {
    return axios.put(`/setups`, params)
        .then(response => response)
        .catch(error => error)
}
