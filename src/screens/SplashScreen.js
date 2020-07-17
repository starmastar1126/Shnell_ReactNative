import React, {Component} from 'react';
import {Image, SafeAreaView, StatusBar, StyleSheet} from 'react-native';
import AsyncStorage from '@react-native-community/async-storage';

export default class SplashScreen extends Component {
    static navigationOptions = ({navigation}) => ({
        
    });

    constructor(props) {
        super(props);
        this.state = {
            screenType: '',
        };
    }

    componentDidMount() {
        setTimeout(() => {

            AsyncStorage.getItem('Token')
            .then(value => {
                if (value !== null || value !== '') {
                  this.setState({token: value})
                }
                
              // console.log('AAbbb',value);
              

              //this.props.navigation.navigate('UserLogin');

              if ( this.state.token !== null)
              {
                this.props.navigation.navigate('HomePage');
              }else
              {
                this.props.navigation.navigate('WelcomeScreen');
              } 

            })
            .done();

           

            
        }, 1500);



        


    }


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
                    <Image
                        source={require('../images/logo.png')}
                        style={styles.Logo}
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
