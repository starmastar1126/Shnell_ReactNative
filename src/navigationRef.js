/* eslint-disable no-unused-vars */
/* 
import * as React from 'react';
import {NavigationContainer} from '@react-navigation/native';
let navigator;

export const setNavigator = nav => {
  navigator = nav;
};

export const navigate = (routeName, params) => {
  navigator.dispatch(NavigationContainer.navigate({routeName, params}));
};
 */



import * as React from 'react';
export const navigationRef = React.createRef();

export function navigate(name, params) {
    console.log('navigateyo:', name);

    //console.log('navigationRef.current',navigationRef.current);

    if (navigationRef.current) {
        // Perform navigation if the app has mounted
        navigationRef.current.navigate(name, params);
    } 

  //navigationRef.current.navigate(name, params);
}