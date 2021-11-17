import ApartmentComponent from "./components/ApartmentComponent";

export const routes = [
    {
        name: 'acceuil',
        path: '/accueil',
        component: ApartmentComponent
    },
    {
        name: 'voir',
        path: '/voir/:id',
        component: ApartmentComponent
    }
]
