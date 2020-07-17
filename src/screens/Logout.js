import React, {Component} from 'react';
import {Image, SafeAreaView, StatusBar, StyleSheet, Text, Button} from 'react-native';
import AsyncStorage from '@react-native-community/async-storage';

import * as RootNavigation from '../navigationRef';

export default class Logout extends Component {
  static navigationOptions = ({navigation}) => ({});

  constructor(props) {
    super(props);
    this.state = {
      screenType: '',
    };
  }

  componentDidMount() {
    console.log(this.props.navigation);
    this.props.navigation.closeDrawer()


    this.clearAsyncStorage().then(function() {
     console.log('Clear:cleared storage');

      RootNavigation.navigate('WelcomeScreen');
    
    });

    //AsyncStorage.setItem('Token', null);
    //AsyncStorage.setItem('Islogin', 'No');
  }

  clearAsyncStorage = async () => {
    AsyncStorage.clear();
   
    //this.props.navigation.navigate('SplashScreen').bind(this);
  };

  render() {
    return (
      <SafeAreaView style={styles.ScreenView}>
        <StatusBar
          barStyle="light-content"
          hidden={false}
          backgroundColor="#00BCD4"
          translucent={true}
          networkActivityIndicatorVisible={true}
        />

        <Text>You have been Logged out</Text>
        <Button
          title="Go to Home"
          //edit
          onPress={()=>alert('done')}
        />

      </SafeAreaView>
    );
  }
}

const styles = StyleSheet.create({
  ScreenView: {
    flex: 1,
    alignItems: 'center',
    justifyContent: 'center',
    flexDirection: 'column',
  },
  Logo: {
    width: '90%',
    height: 350,
    resizeMode: 'contain',
  },
});
