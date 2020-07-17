/* eslint-disable prettier/prettier */
/* eslint-disable no-return-assign */
/* eslint-disable react-native/no-inline-styles */
import React, { Component } from 'react';
import {
  StyleSheet,
  Navigator,
  View,
  Button,
} from 'react-native';
import AsyncStorage from '@react-native-community/async-storage';
import { NavigationContainer } from '@react-navigation/native';
import { createStackNavigator } from '@react-navigation/stack';
import { createDrawerNavigator } from '@react-navigation/drawer';
import WelcomeScreen from './src/screens/WelcomeScreen';
import WelcomeWhoWeAre from './src/screens/WelcomeWhoWeAre';
import StartupList from './src/screens/StartupList';
import StartupDetails from './src/screens/StartupDetails';
import UserRegistration from './src/screens/UserRegistration';
import ConfirmSMS from './src/screens/ConfirmSMS';
import HomePage from './src/screens/HomePage';
import InvestmentPage from './src/screens/InvestmentPage';
import SplashScreen from './src/screens/SplashScreen';
import Logout from './src/screens/Logout';
import UserLogin from './src/screens/UserLogin';

import { navigationRef, isMountedRef } from './src/navigationRef';


import { multiply } from 'react-native-reanimated';


const Drawer = createDrawerNavigator();

class HamburgerIcon extends Component {
  toggleDrawer = () => {
    this.props.navigationProps.toggleDrawer();
  };




  render() {
    return (
      <View style={{ flexDirection: 'row' }}>
        <TouchableOpacity onPress={this.toggleDrawer}>
          <Image
            source={require('./src/images/drawer_icon.png')}
            style={{ width: 25, marginTop: 10, height: 25, marginLeft: 5, tintColor: 'white' }} />
        </TouchableOpacity>
      </View>
    );
  }
}




const DrawerScreen = (navigation) => {
  return (

    <Drawer.Navigator initialRouteName="MainPage" drawerStyle={{ backgroundColor: '#FF0000'}}
      drawerContentOptions={{
        activeBackgroundColor: '#00FF00',
        activeTintColor: 'black'
      }}
    >
      {/* <Drawer.Screen name="MainPage" component={StackScreen} options={navigation} /> */}
      <Drawer.Screen name="HomePage" component={HomePage} options={navigation} />
      <Drawer.Screen name="Logout" component={Logout} />
      <Drawer.Screen name="InvestmentPage" component={InvestmentPage} />
      <Drawer.Screen name="StartupList" component={StartupList} />
    </Drawer.Navigator>

  )
}

const Stack = createStackNavigator();
const StackScreen = () => (
  <Stack.Navigator>
    <Stack.Screen name="SplashScreen" component={SplashScreen} options={{ headerShown: false }} />
    <Stack.Screen name="WelcomeScreen" component={WelcomeScreen} options={{ headerShown: false }} />
    <Stack.Screen name="WelcomeWhoWeAre" component={WelcomeWhoWeAre} options={{ headerShown: false }} />
    <Stack.Screen name="StartupList" component={StartupList} options={{ headerShown: false }} />
    <Stack.Screen name="StartupDetails" component={StartupDetails} options={{ headerShown: true }} />
    <Stack.Screen name="UserRegistration" component={UserRegistration} options={{ headerShown: false }} />
    <Stack.Screen name="ConfirmSMS" component={ConfirmSMS} options={{ headerShown: false }} />
    <Stack.Screen name="HomePage" component={DrawerScreen} options={{ headerShown: false }} />
    <Stack.Screen name="InvestmentPage" component={InvestmentPage} options={{ headerShown: true }} />

    <Stack.Screen name="UserLogin" component={UserLogin} options={{ headerShown: true, title: 'User Login' }} />


  </Stack.Navigator>
);


export default class App extends React.Component {

  constructor(props) {
    super(props);

    this.state = {
      userToken: null,
    };

  }

  componentDidMount() {


    AsyncStorage.getItem('Token')
      .then(value => {

        //if (value !== null || value !== '') {
        this.setState({ userToken: value });
        // }

        console.log('app state Token', this.state.userToken);

      })
      .done();


  }

  render() {
    return (




      console.disableYellowBox = true,
      <NavigationContainer ref={navigationRef}>
        {
          this.state.userToken === null ? (

            <StackScreen  />
          ) :
          (
            <DrawerScreen  />

          )
        }

      </NavigationContainer>
    );
  }
}

