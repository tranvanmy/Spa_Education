export function callApiFetch(params = {}) {
    return axios.get('/join-us', params)
        .then(response => response)
        .catch(error => error)
}

export function callApiAdd(params) {
    return axios.post('/join-us', params)
        .then(response => response)
        .catch(error => error)
}

export function callApiEdit(id, params) {
    return axios.put(`/join-us/${id}`, params)
        .then(response => response)
        .catch(error => error)
}

export function callApiDelete(id) {
    return axios.delete(`/join-us/${id}`)
        .then(response => response)
        .catch(error => error)
}

export function callApiShow(id) {
    return axios.get(`/join-us/${id}`)
        .then(response => response)
        .catch(error => error)
}
