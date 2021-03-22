import { http } from './service'

export default {
    list: () => {
        return http.get('users')
    },

    create: (user) => {
        return http.post('users', user)
    },

    read: (id) => {
        return http.get(`users/${id}`)
    }
}