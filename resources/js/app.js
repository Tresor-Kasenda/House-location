import '../css/app.css';
import './bootstrap'

import Turbolinks from 'turbolinks'
Turbolinks.start()

import './config/hamburger'
import './components/search'

import {EditProfile, CloseProfile} from './config/userModal'

EditProfile(
    document.querySelector('#editProfile'),
    document.querySelector('#editeUserProfile')
)

CloseProfile(
    document.querySelector('#closeProfile'),
    document.querySelector('#editeUserProfile')
)
