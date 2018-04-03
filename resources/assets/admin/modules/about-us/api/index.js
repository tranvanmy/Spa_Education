export function callApiFetch(params = {}) {
    return axios.get('/about-us', params)
        .then(response => response)
        .catch(error => error)
}

export function callApiAdd(params) {
    return axios.post('/about-us', params)
        .then(response => response)
        .catch(error => error)
}

export function callApiEdit(id, params) {
    return axios.put(`/about-us/${id}`, params)
        .then(response => response)
        .catch(error => error)
}

export function callApiDelete(id) {
    return axios.delete(`/about-us/${id}`)
        .then(response => response)
        .catch(error => error)
}

export function callApiShow(id) {
    return axios.get(`/about-us/${id}`)
        .then(response => response)
        .catch(error => error)
}
