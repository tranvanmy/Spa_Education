export function callApiFetch(params = {}) {
    return axios.get('/research-developments', params)
        .then(response => response)
        .catch(error => error)
}

export function callApiAdd(params) {
    return axios.post('/research-developments', params)
        .then(response => response)
        .catch(error => error)
}

export function callApiEdit(id, params) {
    return axios.put(`/research-developments/${id}`, params)
        .then(response => response)
        .catch(error => error)
}

export function callApiDelete(id) {
    return axios.delete(`/research-developments/${id}`)
        .then(response => response)
        .catch(error => error)
}

export function callApiShow(id) {
    return axios.get(`/research-developments/${id}`)
        .then(response => response)
        .catch(error => error)
}
