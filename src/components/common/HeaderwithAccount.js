/* eslint-disable no-unused-vars */
/* eslint-disable react-native/no-inline-styles */
// Import libraries for making a component
import React from 'react';
import {StyleSheet, View, TouchableOpacity, Text, Image} from 'react-native';

// Make a component

const HeaderwithAccount = (props, onPress) => {

  const {textStyle, viewStyle} = styles;

  return (
    <View style={[styles.container, props.style]}>
      <View style={styles.leftIconButtonRow}>
        <View style={styles.textWrapper}>
          <Text numberOfLines={1} style={styles.title}>
            {props.Headingtext}
          </Text>
        </View>
      </View>
      <View style={styles.leftIconButtonRowFiller} />

      <TouchableOpacity style={styles.rightIconButton} onPress={props.onPress}>
        <Image
          source={require('../../images/drawer_icon.png')}
          style={{
            width: 25,
            marginTop: 0,
            height: 25,
            marginLeft: 5,
            tintColor: 'white',
            marginRight: 10,
          }}
        />
      </TouchableOpacity>
    </View>
  );
};

const styles = StyleSheet.create({
  container: {
    
    backgroundColor: '#3F51B5',
    flexDirection: 'row',
    alignItems: 'center',
    justifyContent: 'space-between',
    padding: 4,
    elevation: 3,
    shadowOffset: {
      height: 2,
      width: 0,
    },
    shadowColor: '#111',
    shadowOpacity: 0.2,
    shadowRadius: 1.2,
  },
  leftIconButton: {
    padding: 11,
  },
  leftIcon2: {
    backgroundColor: 'transparent',
    color: '#FFFFFF',
    fontFamily: 'Roboto',
    fontSize: 24,
  },
  textWrapper: {
    alignSelf: 'flex-end',
    marginLeft: 21,
    marginBottom: 14,
  },
  title: {
    backgroundColor: 'transparent',
    color: '#FFFFFF',
    fontSize: 18,
    fontFamily: 'roboto-regular',
    lineHeight: 18,
    marginTop: 15,
  },
  leftIconButtonRow: {
    flexDirection: 'row',
    marginLeft: 5,
    marginTop: 5,
    marginBottom: 5,
  },
  leftIconButtonRowFiller: {
    flex: 1,
    flexDirection: 'row',
  },
  rightIconButton: {
    alignItems: 'center',
    padding: 11,
    marginRight: 5,
    marginTop: 5,
  },
  rightIcon2: {
    backgroundColor: 'transparent',
    color: '#FFFFFF',
    fontFamily: 'Roboto',
    fontSize: 24,
  },
});

// Make the component available to other parts of the app
export {HeaderwithAccount};
