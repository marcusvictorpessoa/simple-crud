import LoginPage from './pages/Login/LoginPage'
import RegisterPage from './pages/Register/RegisterPage'
import HomePage from './pages/Home/HomePage'
import AddPage from './pages/Add/AddPage'
import EditPage from './pages/Edit/EditPage'

export default { 
    '/': LoginPage,
    '/register': RegisterPage,
    '/home': HomePage,
    '/add': AddPage,
    '/edit': EditPage
}
