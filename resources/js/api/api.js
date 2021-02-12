import axios from 'axios';

export default () => {
    let token = localStorage.getItem('access_token')
    return axios.create({
        baseURL: 'http://project.net/api',
        headers: {
            Accept: "application/json",
            "Content-Type": "application/json",
            Authorization: 'Bearer ' + token
        }
    });
}
