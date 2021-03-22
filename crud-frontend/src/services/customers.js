import { http } from './service'

export default {
    list: () => {
        return http.get('customers')
    },

    create: (customer) => {
        return http.post('customers', customer)
    },

    read: (id) => {
        return http.get(`customers/${id}`)
    },

    delete: (id) => {
        return http.delete(`customers/${id}`)
    },

    update: (id, customer) => {
        return http.put(`customers/${id}`, customer)
    }
}