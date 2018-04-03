export function callApiFetch(params = {}) {
    return axios.get('/courses', params)
        .then(response => response)
        .catch(error => error)
}

export function callApiAdd(params) {
    return axios.post('/courses', params)
        .then(response => response)
        .catch(error => error)
}

export function callApiEdit(id, params) {
    return axios.put(`/courses/${id}`, params)
        .then(response => response)
        .catch(error => error)
}

export function callApiDelete(id) {
    return axios.delete(`/courses/${id}`)
        .then(response => response)
        .catch(error => error)
}

export function callApiShow(id) {
    return axios.get(`/courses/${id}`)
        .then(response => response)
        .catch(error => error)
}
